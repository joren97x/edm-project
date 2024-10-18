<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
<div class="bg-white p-8 rounded-lg shadow-md w-1/3">
    <div class="flex justify-center mb-6">
      <img src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg" alt="Sneat Logo" class="w-10 h-10" />
    </div>
    <h2 class="text-2xl font-semibold text-center mb-2">Create Account</h2>
    <p class="text-center text-gray-500 mb-6">
      Fill out the form carefully for registration
    </p>
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <small id="emailError" class="text-red-500 text-xs hidden">Please enter a valid email.</small>
      </div>

      <div class="grid grid-cols-2 mb-4 gap-4">
        <div>
            <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <small id="fnameError" class="text-red-500 text-xs hidden">Please enter your first name.</small>
        </div>
        <div>
            <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <small id="lnameError" class="text-red-500 text-xs hidden">Please enter your last name.</small>
        </div>
      </div>

      <div class="mb-4">
            <label for="DOB" class="block text-sm font-medium text-gray-700">Birthdate</label>
            <input type="date" id="DOB" name="DOB" placeholder="Enter your email or username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <small id="dobError" class="text-red-500 text-xs hidden">Please enter your birthdate.</small>
        </div>

        <div class="grid grid-cols-2 mb-4 gap-4">
            <div>
                <div class="flex justify-between">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                </div>
                <input type="password" id="password" name="password" placeholder="••••••••" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <small id="passError" class="text-red-500 text-xs hidden">Please enter your password.</small>
            </div>
            <div>
                <div class="flex justify-between">
                <label for="password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                </div>
                <input type="password" id="passwordC" name="passwordC" placeholder="••••••••" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <small id="passCError" class="text-red-500 text-xs hidden">Passwords do not match.</small>
            </div>
        </div>
      <!-- <div class="mb-4">
        <div class="flex justify-between">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        </div>
        <input type="password" id="pass" name="pass" placeholder="••••••••" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      </div> -->

      <input type="button" value="REGISTER" onclick="register()" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
    
    <p class="mt-6 text-center text-sm text-gray-500">
      Already have an account? <a href="/" class="text-indigo-600 hover:text-indigo-500">Login</a>
    </p>
  </div>
    <!-- <h1>REGISTRATION</h1>
    <div>
            <label for="email">EMAIL</label>
            <input type="email" id="email" required>
        </div>
        <div>
            <label for="password">PASSWORD</label>
            <input type="password" id="password" required>
        </div>       
        <div>
            <label for="passwordC">CONFIRM PASSWORD</label>
            <input type="password" id="passwordC" required>
        </div>   
        <div>
            <label for="firstname">First Name</label>
            <input type="text" id="fname" required>
        </div> 
        <div>
            <label for="lastname">Last Name</label>
            <input type="text" id="lname" required>
        </div> 
        <div>
            <label for="DOB">Date of Birth</label>
            <input type="date" id="DOB" required>
        </div>
        <input type="button" value="REGISTER" onclick="register()"> -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./public/lib/js/index.js"></script>
</html>