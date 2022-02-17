package main

import "fmt"

func staircase(n int32) {
	var i,j int32
	for i = 0; i < n; i++ {
		for j = 1; j <= n; j++ {
			if i >= n-j {
				fmt.Print("#")
			} else {
				fmt.Print(" ")
			}
		}
		fmt.Println("")
	}
}

func main() {
	staircase(4)
}
