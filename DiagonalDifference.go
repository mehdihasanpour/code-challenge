package main

import "fmt"

func diagonalDifference(arr [][]int32) int32 {
	var first,second int32
	first = 0
	second = 0
	arrSize := len(arr) - 1
	for i := 0; i <= arrSize; i++ {
		for j := 0; j <= arrSize; j++ {
			if i == j {
				first += arr[i][j]
				second += arr[i][arrSize-j]
			}
		}
	}
	result := first-second
	if result < 0 {
		result *= -1
	}
	return result
}

func main() {
	arr := [][]int32{{1, 2, 3}, {4, 5, 6}, {1, 8, 9}}
	fmt.Println(diagonalDifference(arr))
}
