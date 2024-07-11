# Secure Coding Exercise: HTML Injection

Welcome to the Secure Coding Exercise on HTML Injection. This exercise demonstrates how to handle and prevent HTML injection vulnerabilities in a web application.

## Table of Contents

- [Introduction](#introduction)
- [Installation](#installation)
- [Prevention](#prevention)
- [Testing](#testing)
- [Code Explanation](#code-explanation)
- [Conclusion](#conclusion)
- [Additional Resources](#additional-resources)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Introduction

HTML Injection occurs when user input is interpreted as HTML code rather than plain text. This can lead to various security issues, including data breaches and unauthorized access. This exercise showcases a simple form that takes user input and securely displays it on the webpage.

## Installation

Follow these steps to set up the exercise on your local system:

1. **Clone the Repository**
    ```bash
    git clone https://github.com/yourusername/secure-coding-exercises.git
    cd secure-coding-exercises/html-injection
    ```

2. **Start a Local Server**
    You can use PHP's built-in server to run the exercise:
    ```bash
    php -S localhost:8000
    ```

3. **Access the Exercise**
    Open your web browser and navigate to:
    ```
    http://localhost:8000
    ```

## Prevention

To prevent HTML injection, follow these best practices:

1. **Input Validation:** Ensure that user input contains only expected characters. In this exercise, we allow only alphanumeric characters.
2. **Output Encoding:** Encode user input before rendering it in HTML. This transforms special characters into their corresponding HTML entities.

## Testing

To test the exercise:

1. **Valid Input:** Enter a name containing only alphanumeric characters (e.g., `JohnDoe`).
2. **Invalid Input:** Enter a name with special characters or HTML tags (e.g., `<script>alert('xss')</script>`).

The application should display "Invalid input" for any input that does not match the allowed pattern.

## Code Explanation

Here is a brief explanation of the code:


## Additional Resources
