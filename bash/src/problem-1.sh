# Project Euler Problem 1 - Multiples of 3 or 5
# If we list all the natural numbers below 10 that are multiples of 3 or 5, we
# get 3, 5, 6 and 9. The sum of these multipliers is 23.
#
# Find the sum of all the multiples of 3 or 5 below 1000

function sum_multiples_of_3_or_5() {
  total=0
  iterations=$(($1 - 1))

  for ((i = 1; i < $1; i++)); do
    if [[ $(($i % 3)) == 0 || $(($i % 5)) == 0 ]]; then
      total=$(($total + $i))
    fi
  done

  echo $total
}

sum_multiples_of_3_or_5 $1
