# VERSO Coding Challenge

## Task Overview

The task is to create an application that iterates over all numbers from 1 to 100. Based on divisibility rules, the program will print the following:

- If the number is divisible by 3, print `Fizz`.
- If the number is divisible by 5, print `Buzz`.
- If the number is divisible by both 3 and 5, print `FizzBuzz`.
- If the number is not divisible by either 3 or 5, print the number itself.

## Additional Requirements

- **Unit Tests**: Write unit tests to prove the correctness of the application.
- **Use a Framework**: Feel free to use any framework or tool you're comfortable with.
- **Completion Time**: The task should take no longer than 2 hours to complete.
- **Repository**: Provide a link to a GitHub or Bitbucket repository after finishing.


### Example Output

```
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
17
Fizz
19
Buzz
...
```

## How to Run the Application

1. Clone the repository:
   ```bash
   git clone git@github.com:fat7i/VERSO_FizzBuzz.git
   ```

2. Navigate to the project directory:
   ```bash
   cd verso-coding-challenge
   ```

3. Install dependencies (assuming you're using Composer):
   ```bash
   composer install
   ```

4. To run the FizzBuzz application, you can execute the following Symfony command:
   ```bash
   php bin/console app:fizzbuzz <start> <end>
   ```
   Replace `<start>` and `<end>` with the range of numbers you'd like to process.

## Testing

Unit tests are included to verify the correctness of the implementation. To run the tests, use the following command:

```bash
vendor/bin/phpunit
```

This will execute all the tests and confirm that the application behaves as expected.

## Technologies Used

- **PHP** (7.4 or higher)
- **Symfony Framework** for application structure and command-line interface
- **PHPUnit** for unit testing

## Features

- **FizzBuzz Service**: A service to generate the FizzBuzz results based on the divisibility rules.
- **Buzz and Fizz Services**: Separate services for handling divisibility by 3 and 5, respectively.
- **Validators**: A collection of validators to ensure that the input parameters are valid before execution.

## Notes

- The application has been structured using the Symfony framework for better scalability and maintainability.
- The logic for determining whether a number should be replaced by "Fizz", "Buzz", or "FizzBuzz" has been modularized into separate services for clarity and ease of testing.
- Input validation ensures that both the start and end values are valid, and that the range is reasonable for performance.
