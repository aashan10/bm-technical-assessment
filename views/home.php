<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Two Way Binding Example</title>
  </head>
  <body class="bg-yellow-100">
    <?php include __DIR__ . '/partials/navbar.php'; ?>
    <div class="box max-w-7xl w-full mx-auto">
      <div class="flex flex-col justify-center items-center w-full gap-10">
        <input
          class="bg-white text-center rounded-full px-3 py-3 w-full border-yellow-900 font-bold text-2xl text-yellow-900 border-2"
          id="bind-target"
          placeholder="Start typing here to see ttwo way binding"
        />
        <button
          class="px-5 py-2 font-bold text-2xl bg-red-500 text-white rounded-full"
          id="reset"
        >
          Change to something else
        </button>
        <span
        title="Click to copy to clipboard"
          class="cursor-pointer px-5 py-3 min-h-[50px] text-3xl font-bold text-yellow-900 rounded-full w-full text-center bg-blue-100"
          id="display-target"
        ></span>
        <span class="text-xs font-bold">Click on the two way bound text to copy it into the clipboard</span>
      </div>

      <span class="text-yellow-900 text-sm"
        >Inspect Elements to see more magic</span
      >
    </div>

    <style>
      .box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        padding-top:20vh;
        padding-bottom:20vh;
        height: 100vh;
        gap: 20px;
      }

      body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #fefefe;
      }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/js/library.js" derer></script>
    <script type="text/javascript">
        const bindTarget = BMLib.getById('bind-target');
        const displayTarget = BMLib.getById('display-target');
        const reset = BMLib.getById('reset');
    </script>
    <script>
      tailwind.config = {};
    </script>
    <script src="/js/two-way-binding.js" derer></script>
    <script src="/js/post-requests.js" derer></script>
    <script src="/js/clipboard.js" derer></script>


    
  </body>
</html>
