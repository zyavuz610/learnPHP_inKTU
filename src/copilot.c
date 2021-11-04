#include <stdio.h>

int sum(int a, int b) {
    return a + b;
}

void swap(int *a, int *b) {
    int tmp = *a;
    *a = *b;
    *b = tmp;
}

int sortArray(int *arr, int n) {
    int i, j;
    for (i = 0; i < n; i++) {
        for (j = i + 1; j < n; j++) {
            if (arr[i] > arr[j]) {
                swap(&arr[i], &arr[j]);
            }
        }
    }
    return 0;
}

int main(void)
{
    printf("Hello, World!\n");
    return 0;
}