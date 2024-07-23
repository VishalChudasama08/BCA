# Write a python program for Knapsack algorithm
def knapsack(weights, values, capacity):
    n = len(values)
    # Create a 2D array to store the maximum value that can be attained with a given capacity
    dp = [[0 for _ in range(capacity + 1)] for _ in range(n + 1)]

    # Build the table dp[][] in bottom-up manner
    for i in range(n + 1):
        for w in range(capacity + 1):
            if i == 0 or w == 0:
                dp[i][w] = 0
            elif weights[i - 1] <= w:
                dp[i][w] = max(values[i - 1] + dp[i - 1][w - weights[i - 1]], dp[i - 1][w])
            else:
                dp[i][w] = dp[i - 1][w]

    # The maximum value that can be put in a knapsack of capacity W
    return dp[n][capacity]

# Example usage
weights = [1, 2, 3, 8, 7, 4]
values = [20, 5, 10, 40, 15, 25]
capacity = 10

max_value = knapsack(weights, values, capacity)
print(f"The maximum value that can be put in a knapsack of capacity {capacity} is {max_value}")
