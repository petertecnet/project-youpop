module.exports = {
    "env": [
      'eslint:recommended',
      'plugin:vue/vue3-essential'
    ],

    "extends": [
        "eslint:recommended",
        "plugin:vue/vue3-essential"
    ],

    "overrides": [
    ],

    "parserOptions": {
        "ecmaVersion": "latest"
    },

    "plugins": [
        "vue"
    ],

    "rules": {
    },

    root: true,

    env: {
      browser: true,
      es2021: true,
      node: true
    },

    parserOptions: {
      ecmaVersion: 2020
    },

    rules: {
      'no-console': process.env.NODE_ENV === 'production' ? 'warn' : 'off',
      'no-debugger': process.env.NODE_ENV === 'production' ? 'warn' : 'off'
    }
}
