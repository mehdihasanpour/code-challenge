package main

import "fmt"

func extraLongFactorials(n int64) int64 {
    var multiple int64
    multiple = 1
    for i := n; i >= 1; i-- {
        multiple *= i
    }

    return multiple
}

func main() {
	fmt.Println(extraLongFactorials(40))
}

//TODO: this function not work properly yet
