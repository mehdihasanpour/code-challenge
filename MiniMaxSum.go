package main

import "fmt"

func miniMaxSum(arr []int64) (int64, int64) {
	var i, j, dish, minSum, maxSum int64
	for j = 0; j < 10; j++ {
		for i = 0; i < 4; i++ {
			if arr[i] > arr[i+1] {
				dish = arr[i+1]
				arr[i+1] = arr[i]
				arr[i] = dish
			}
		}
	}
	minSum = arr[0] + arr[1] + arr[2] + arr[3]
	maxSum = arr[1] + arr[2] + arr[3] + arr[4]
	return minSum, maxSum
}

func main() {
	fmt.Print(miniMaxSum([]int64{156873294, 719583602, 581240736, 605827319, 895647130}))
}
