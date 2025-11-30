# Contribution Guidelines

Thank you for considering contributing to Shadcn Blade! We welcome contributions from the community to help improve this package.

## Getting Started

1.  **Fork the Repository**: Start by forking the repository to your GitHub account.
2.  **Clone the Repository**: Clone your forked repository to your local machine.

    ```bash
    git clone https://github.com/your-username/shadcn-blade.git
    ```

3.  **Install Dependencies**: Install the project dependencies using Composer.

    ```bash
    composer install
    ```

## Development

### Adding a New Component

1.  Create a new directory for your component in `resources/views/components/{component-name}`.
2.  Add your Blade component files (e.g., `{component-name}.blade.php`).
3.  Ensure your component uses Tailwind CSS for styling and follows the Shadcn UI design patterns.
4.  Add a test case in `tests/ComponentTest.php` or create a new test file if necessary.

### Running Tests

We use PHPUnit for testing. Please ensure all tests pass before submitting a pull request.

```bash
vendor/bin/phpunit
```

## Documentation

If you add a new component or modify an existing one, please update the documentation accordingly.

1.  Create or update the component documentation in `docs/components/{component-name}.md`.
2.  Update `docs/components.md` to include a link to the new component.

## Submitting a Pull Request

1.  Create a new branch for your feature or bug fix.
2.  Commit your changes with clear and descriptive commit messages.
3.  Push your branch to your forked repository.
4.  Open a pull request against the `main` branch of the original repository.
5.  Provide a detailed description of your changes and any relevant context.

## Code of Conduct

Please note that this project is released with a Contributor Code of Conduct. By participating in this project you agree to abide by its terms.
