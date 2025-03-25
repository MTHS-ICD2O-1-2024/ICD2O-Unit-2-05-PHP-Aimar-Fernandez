<!DOCTYPE html>
<!--ICD2O Unit 2-05 PHP-->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="salary program, PHP" />
  <meta name="keywords" content="ICD2O, mths" />
  <meta name="author" content="Aimar Fernandez" />
  <meta name="viewport" content="width+device-width, initial-scale=.1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_orange-red.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Salary Program, PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <br />
      <div class="mdl_layout__header-row">
        <span class="mdl-layout-title">Salary Program, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div>
        <img src="./images/income_tax.jpg" alt="income tax">
      </div>
      <br />
      <h3>Please enter your employment information.</h3>
      <form action="answer.php" method="GET">
        <br />
        <!-- Numeric Textfield with Floating Label -->
        <div
          class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input
            class="mdl-textfield__input" type="text"
            pattern="-?[0-9]*(\.[0-9]+)?" name="hours-worked" />
          <label class="mdl-textfield__label" for="base-input"> Hours worked</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        <!-- Numeric Textfield with Floating Label -->
        <div
          class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input
            class="mdl-textfield__input" type="text"
            pattern="-?[0-9]*(\.[0-9]+)?" name="hourly-wage" />
          <label class="mdl-textfield__label" for="base-input"> Hourly wage ($)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        <!-- Raised button with ripple -->
        <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"
          type="submit">
          Enter
        </button>
        <br />
      </form>
    </main>
  </div>
</body>

</html>