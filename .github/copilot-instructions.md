# Copilot Instructions for PartyOne PHP Codebase

## Overview
This document provides guidance for AI coding agents working within the PartyOne PHP codebase. Understanding the architecture, workflows, and conventions of this project is essential for effective contributions.

## Architecture
- **Major Components**: The project is structured into several key directories:
  - `public/`: Contains the main entry points for the application, such as `index.php` and `checkout.php`.
  - `includes/`: Houses reusable components like headers and footers.
  - `assets/`: Contains static resources like CSS, JavaScript, and images.

- **Data Flow**: The application primarily uses PHP for server-side logic, with data being passed between the public files and included components. Understanding how data flows through these files is crucial for debugging and feature development.

## Developer Workflows
- **Building and Running**: The application runs on a local server (e.g., XAMPP). Ensure the server is running to test changes.
- **Testing**: There are no formal tests documented in this codebase. Manual testing is required after changes.
- **Debugging**: Use PHP error logs for debugging. Ensure error reporting is enabled in the `php.ini` file.

## Project-Specific Conventions
- **File Naming**: Use lowercase and hyphens for file names (e.g., `book-now.php`).
- **Code Structure**: Follow the MVC pattern loosely; while not strictly enforced, separating logic into models, views, and controllers is encouraged.

## Integration Points
- **External Dependencies**: The project does not currently utilize external libraries or frameworks, relying solely on PHP and standard web technologies.
- **Cross-Component Communication**: Components communicate primarily through included PHP files and shared session data.

## Key Files/Directories
- **Main Entry Point**: [public/index.php](public/index.php)
- **Checkout Process**: [public/checkout.php](public/checkout.php)
- **Reusable Components**: [includes/header.php](includes/header.php), [includes/footer.php](includes/footer.php)