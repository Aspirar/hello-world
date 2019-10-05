#include <iostream>

int main() {
    int n = 0;
    again:
    for (int i = n == 0 ? 'H' : n == 1 ? 'E' : (n == 2 || n == 3 ) ? 'L' : n == 4 ? 'O' : n == 5 ? ' ' :n == 6 ? 'W' :n == 7 ? 'O' :n == 8 ? 'R' :n == 9 ? 'L' :n == 10 ? 'D' :0; i ; ) {
        std::cout << (char)i;
        ++n;
        if (i) {
            goto again;
        }
    }
    return 0;
}
