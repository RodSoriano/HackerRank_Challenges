#n this challenge, the task is to debug the existing code to successfully execute all provided test files.
#Debug the given function strings_xor to find the XOR of the two given strings appropriately. 
#Note: You can modify at most three lines in the given code and you cannot add or remove lines to the code.

# Original code
def strings_xor(s, t):
    res = "";
    for i in range(len(s)):
        if s[i] = t[i]:
            res = '0';
        else:
            res = '1';

    return res

s = input()
t = input()
print(strings_xor(s, t))

# Debugged code

def strings_xor(s, t):
    res = ""
    for i in range(len(s)):
        if s[i] == t[i]: # added another equal to compare if they are the same
            res = res + '0'; # concatenated the previous answer with the added number so res can save previous data run in the loop
        else:
            res = res + '1'; # same thing as line 26

    return res

s = input()
t = input()
print(strings_xor(s, t))

#https://www.hackerrank.com/challenges/one-month-preparation-kit-strings-xor/problem?h_r=internal-search