# Secure Coding Exercise: Security Headers

Welcome to the Secure Coding Exercise on Security Headers. This exercise demonstrates how to implement various HTTP security headers to enhance the security of a web application.

## Table of Contents

- [Introduction](#introduction)
- [Setup](#setup)
- [Security Headers Implemented](#security-headers-implemented)
- [Testing](#testing)

## Introduction

HTTP security headers provide an additional layer of security by helping to mitigate various security vulnerabilities. This exercise showcases a simple HTML file that includes several important security headers to protect against attacks like XSS, clickjacking, and content sniffing.

## Setup

Follow these steps to set up the exercise on your local system:

1. **Clone the Repository**
    ```bash
    git clone https://github.com/yourusername/secure-coding-exercises.git
    cd secure-coding-exercises/security-headers
    ```

2. **Open the HTML File**
    Open `index.html` in your preferred web browser to see the security headers in action.

## Security Headers Implemented

### Content Security Policy (CSP)

The CSP header helps prevent XSS attacks by specifying which sources of content are allowed to be loaded and executed by the browser.

```html
<meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' https://cdnjs.cloudflare.com; style-src 'self' https://fonts.googleapis.com">
```
## Testing

To test the exercise:

    Open the HTML File:
    Open index.html in your web browser.

    Inspect Security Headers:
    Use browser developer tools to inspect the HTTP response headers and verify the security headers are correctly applied.

