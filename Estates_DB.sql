
CREATE DATABASE p_estates;
USE p_estates;

-- Table to store user information (sign-up, login, etc.)
CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,  -- Store hashed passwords
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for managing properties
CREATE TABLE Properties (
    property_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,  -- Link to the owner/manager (Users table)
    property_name VARCHAR(100) NOT NULL,
    property_address VARCHAR(255),
    property_type VARCHAR(50),  -- e.g., "Apartment", "House", etc.
    property_description TEXT,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Table for tracking tenants
CREATE TABLE Tenants (
    tenant_id INT AUTO_INCREMENT PRIMARY KEY,
    property_id INT NOT NULL,  -- Link to the property
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(15),
    lease_start DATE,
    lease_end DATE,
    monthly_rent DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (property_id) REFERENCES Properties(property_id)
);

-- Table for recording rental income/payments
CREATE TABLE RentalPayments (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_id INT NOT NULL,  -- Link to the tenant
    amount_paid DECIMAL(10, 2) NOT NULL,
    payment_date DATE NOT NULL,
    payment_method VARCHAR(50),  -- e.g., "Credit Card", "Bank Transfer"
    FOREIGN KEY (tenant_id) REFERENCES Tenants(tenant_id)
);

-- Optional: Features of the EstateTrack system (for website display)
CREATE TABLE Features (
    feature_id INT AUTO_INCREMENT PRIMARY KEY,
    feature_name VARCHAR(100),
    feature_description TEXT
);
