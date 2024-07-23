# Write a python program to display Fibonacci sequence with revisited method 
def fibonacci(n, memo={}):
    # Base cases
    if n in memo:
        return memo[n]
    if n <= 1:
        return n

    # Recursive case with memoization
    memo[n] = fibonacci(n - 1, memo) + fibonacci(n - 2, memo)
    return memo[n]

def display_fibonacci_sequence(count):
    print("Fibonacci Sequence:")
    for i in range(count):
        print(fibonacci(i), end=' ')
    print()

# Example usage
number_of_terms = 10
display_fibonacci_sequence(number_of_terms)
