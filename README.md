# Custom WordPress Theme: Understrap Child

## Overview
This repository contains a custom WordPress theme built as a child theme of the popular Understrap framework. The theme includes advanced features such as custom post search and filtering using a custom plugin with AJAX, integration of SCSS for styling, Bootstrap for responsive design, and a modern build system powered by Gulp.

---

## Features

### 1. **Custom Post Search and Filtering**
- Implemented using a custom-built WordPress plugin.
- Supports dynamic search and filtering via AJAX for seamless user experience.

### 2. **SCSS Integration**
- Modular SCSS files for better code organization.
- Compiled and minified into production-ready CSS using Gulp.

### 3. **Bootstrap Framework**
- Fully responsive design with Bootstrap 5.
- Utilizes Bootstrap’s grid system, utilities, and components for a consistent design.

### 4. **Gulp Build System**
- Automates tasks such as:
  - Compiling SCSS to CSS.
  - Minifying JavaScript and CSS.
  - Live browser reloading during development.
  - Concatenation and optimization of assets.

---

## Installation

### Prerequisites
Ensure you have the following installed:
- **Node.js** (v14 or later)
- **NPM** or **Yarn**
- **WordPress** installed on your server

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/your-repository.git
   ```

2. Navigate to the theme directory:
   ```bash
   cd your-repository
   ```

3. Install Node.js dependencies:
   ```bash
   npm install
   ```

4. Run Gulp to start the development environment:
   ```bash
   gulp
   ```

5. Activate the theme in the WordPress admin panel.

---



## Development

### Running Gulp
To start the development server and watch for changes:
```bash
gulp
```
This will:
- Compile SCSS into minified CSS.
- Minify JavaScript files.
- Reload the browser automatically on file changes.

### Building for Production
To create a production-ready build:
```bash
gulp build
```
This will generate optimized assets in the appropriate directories.

---

## Technologies Used

- **WordPress**: Content Management System.
- **Understrap**: Parent theme framework.
- **Bootstrap**: Responsive front-end framework.
- **SCSS**: CSS preprocessor for modular and maintainable styles.
- **Gulp**: Task runner for automating asset compilation and optimization.
- **AJAX**: Dynamic search and filtering without page reloads.

---





## Author
Developed by **Roman Chaus**. If you have any questions, feel free to contact me at [roman1997lviv@gmail.com](mailto:roman1997lviv@gmail.com).

