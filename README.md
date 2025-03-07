# Laboratory Work №2: Control Structures

### Step 1: Installing PHP 

1. Download the latest version of PHP from the official website: https://www.php.net/downloads.
2. Add the PHP path to the environment variables (`Path`).
3. Verify the installation by running the following command in the terminal: `php -v`.

### Step 2: Launching the project

1. Cloning the repository:

   1.1 On GitHub, navigate to the main page of the repository.

   1.2 Above the list of files, click <> Code.
   
   1.3 Copy the URL for the repository.

   1.4 Open Terminal, сhange the current working directory to the location where you want the cloned directory.

   1.5 Type `git clone`, and then paste the URL you copied earlier.

   1.6 Press Enter to create your local clone.
3. Navigating to the project folder in terminal: `cd [absolute-path-to-the-project-folder]`.
4. Starting the PHP server: `php -S localhost:8080`.
5. Opening the project in a browser: `http://localhost:8000/filename.php`.

## Lab's Description

Mastering the use of conditional statements and loops in PHP for automating data processing and building dynamic web pages.

The lab consists of two main tasks:

   - Conditional Statements (if-else) with the date() Function
   
   - Loops (for, while, and do-while)


## Usage Examples

1. Function `date()` returns a string formatted according to the given format string(in our case day of the week `"l"`).
An if-else statement is used to check whether the current day matches the employee's work schedule. 
If the day matches the working days, the corresponding time is displayed. Otherwise, "Non-working day" is shown. 

```php

<tr>
                <td>1</td>
                <td>John Styles</td>
                <?php if (date("l") == "Monday" || date("l") == "Wednesday" || date("l") == "Friday"): ?>
                    <td>8:00-12:00</td>
                <?php else: ?>
                    <td>Нерабочий день</td>
                <?php endif; ?>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Doe</td>
                <?php if (date("l") == "Tuesday" || date("l") == "Thursday" || date("l") == "Saturday"): ?>
                    <td>12:00-16:00</td>
                <?php else: ?>
                    <td>Нерабочий день</td>
                <?php endif; ?>
            </tr>
        
```

2. This code demonstrates how to output the values of $a and $b at each step of the loop. Moreover, I demonstrate 3 different types of control structures:

    - `for`


    ```php
    for ($i = 0; $i <= 5; $i++):
            $a += 10;
            $b += 5;
        ?>

    <div class="result"><?= $i + 1 ?>: Number 1: <?= $a ?>, number 2: <?= $b ?></div>
    <?php endfor; ?>
    ```

    - `while` checks the condition before executing the loop. If the condition is false initially, the code inside the loop will not execute.


    ```php
    while ($i <= 5):
            $a += 10;
            $b += 5;
            $i++;
        ?>

     <div class="result"><?= $i ?>: Number 1: <?= $a ?>, number 2: <?= $b ?></div>
    <?php endwhile; ?>
    ```

    - `do-while` executes at least one iteration because the condition is checked after the first execution of the code.


    ```php
    <?php
        $a = 0;
        $b = 0;
        $i = 0;

        do {
            $a += 10;
            $b += 5;
        ?>
            <div class="result"><?= $i + 1 ?>: Number 1: <?= $a ?>, number 2: <?= $b ?></div>
        <?php
            $i++;
        } while ($i <= 5);
        ?>
    ```

## The Control Questions

1. What is the difference between for, while and do-while? When is it better to use each?

> [!IMPORTANT]
> The `for` loop is used when you know in advance how many times you want to execute the block of code.
>
> The `while` loop is used when you don’t know in advance how many times you want to execute the block of code. It continues to execute as long as the specified condition is true.
It’s important to make sure that the condition eventually becomes false; otherwise, the loop will run indefinitely, resulting in an infinite loop.
>
> The `do-while` loop is similar to the while loop, but with one key difference: it guarantees that the block of code will execute at least once before checking the condition.

2. How does ternary operator works?

The ternary operator allows performing a simple conditional comparison in a single line. 

```php

$var = condition ? if_it_is_true : if_it_is_false;

```

3. What will happen, if a do-while loop has a condition that is initially false?

The block of code will execute at least once even if the condition is false!

## Source List 

[For vs while vs do-while](https://www.geeksforgeeks.org/difference-between-for-while-and-do-while-loop-in-programming/)

[Function date()](https://www.php.net/manual/en/function.date.php)

















