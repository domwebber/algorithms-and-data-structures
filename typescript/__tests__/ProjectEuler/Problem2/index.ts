import evenFibonacciNumbers from "../../../src/ProjectEuler/Problem2";

test("Reaches the correct answer", () => {
  expect(evenFibonacciNumbers()).toBe(4613732);
});
