import largestPrimeFactor from "../../../src/ProjectEuler/Problem3";

test("Reaches the correct answer", () => {
  expect(largestPrimeFactor()).toBe(6857);
});
