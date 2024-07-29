<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Follow-Up</title>
    @vite('resources/css/tailwind.css') <!-- Link to Tailwind CSS if using Vite or similar build tool -->
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-lg mx-auto bg-white border border-gray-300 rounded-md shadow-md mt-10">
        <div class="bg-green-500 text-white p-4 rounded-t-md text-center">
            <h1 class="text-xl font-bold">Follow-Up on Recent Call</h1>
        </div>
        <div class="p-4">
            <p class="mb-4">Hello {{ $user->name }},</p>
            <p class="mb-4">We wanted to let you know that the recent call with {{ $businessData->business_name }} has been completed successfully. Please review the details and let us know if there are any further actions required.</p>
            <p class="mb-4">If you need any assistance or have any questions, feel free to contact us.</p>
            <p>Best regards,</p>
            <p>The Team</p>
        </div>
        <div class="bg-gray-100 p-4 text-center text-gray-600 text-sm">
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
