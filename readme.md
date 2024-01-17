# PHPUnit-GitHub-CI-Example

## Introduction

This project, "PHPUnit-GitHub-CI-Example", is a simple PHP application designed to demonstrate the use of PHPUnit for unit testing, along with integration into GitHub Actions for continuous integration. This example is perfect for beginners who are looking to get started with automated testing and CI/CD in PHP.

## Setup

### Prerequisites

To run this project, you need to have PHP and Composer installed on your system. Composer is a tool for dependency management in PHP, allowing you to declare the libraries your project depends on and it will manage (install/update) them for you.

#### Installing Composer

If you don't have Composer installed, follow these steps:

1.  Download Composer from getcomposer.org.
2.  Follow the instructions on the website to install Composer on your system.
3.  Once installed, you can verify the installation by running `composer -V` in your terminal. This should display the Composer version.

### Project Setup

1.  **Create a Project Directory**: Create a directory named `PHPUnit-GitHub-CI-Example` in your XAMPP `htdocs` folder.
2.  **Initialize Composer**: Open your terminal, navigate to your project directory, and run the command `composer init` to create a `composer.json` file.
3.  **Add PHPUnit**: Run `composer require --dev phpunit/phpunit` to include PHPUnit as a development dependency in your project.
4.  **Install Dependencies**: Execute `composer install` to install PHPUnit and its dependencies. This will create a `composer.lock` file and a `vendor` directory containing PHPUnit and other necessary dependencies.

## What's Next

Now that the project is set up, you can start writing PHP code and corresponding PHPUnit tests. We'll cover writing tests and integrating with GitHub Actions in subsequent steps.
