module.exports = {
  env: {
    es2021: true,
    node: true,
  },
  plugins: [
    "prettier",
    "@typescript-eslint",
    "jest"
  ],
  extends: [
    "plugin:prettier/recommended",
  ],
  parser: "@typescript-eslint/parser",
  parserOptions: {
    project: "./tsconfig.json",
    ecmaVersion: "latest",
  },
  ignorePatterns: [
    "*.go",
    "*.py",
    "*.php",
    "**/test.*",
    "**/coverage/*",
    "*.json",
    "jest.config.js",
    ".eslintrc.js"
  ],
  rules: {
    "prettier/prettier": [
      "error",
    ],
  },
  overrides: [
    {
      files: ["**/test.*"],
      plugins: ["jest"],
      extends: [
        "plugin:jest/recommended",
        "plugin:jest/style",
      ],
      rules: {
        "@typescript-eslint/unbound-method": "off",
        "jest/unbound-method": "error",
      },
    },
  ],
};
