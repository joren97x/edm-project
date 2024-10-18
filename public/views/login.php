<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
<div class="bg-white p-8 rounded-lg shadow-md w-1/3">
    <div class="flex justify-center mb-6">
      <img src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg" alt="Sneat Logo" class="w-10 h-10" />
    </div>
    <h2 class="text-2xl font-semibold text-center mb-2">Welcome to Abc123! <span>👋</span></h2>
    <p class="text-center text-gray-500 mb-6">
      Please sign-in to your account and start the adventure
    </p>
    
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email or Username</label>
        <input type="email" id="email" name="email" placeholder="Enter your email or username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <small id="emailError" class="text-red-500 text-xs hidden">Please enter your email or username.</small>  
    </div>

      <div class="mb-4">
        <div class="flex justify-between">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        </div>
        <input type="password" id="pass" name="pass" placeholder="••••••••" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <small id="passError" class="text-red-500 text-xs hidden">Please enter your password.</small>
      </div>

      <input type="button" value="LOGIN" onclick="login()" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
    
    <p class="mt-6 text-center text-sm text-gray-500">
      New on our platform? <a href="/register" class="text-indigo-600 hover:text-indigo-500">Create an account</a>
    </p>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./public/lib/js/index.js"></script>
</html>