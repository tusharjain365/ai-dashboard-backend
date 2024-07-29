<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Follow-Up</title>
    @vite('resources/css/tailwind.css') <!-- Link to Tailwind CSS if using Vite or similar build tool -->
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-lg mx-auto bg-white border border-gray-300 rounded-md shadow-md mt-10">
        <div class="bg-blue-500 text-white p-4 rounded-t-md text-center">
            <h1 class="text-xl font-bold">Follow-Up on Your Recent Call</h1>
        </div>
        <div class="p-4">
            <p class="mb-4">Hello {{ $businessData->name }},</p>
            <p class="mb-4">Thank you for taking the time to speak with us. We wanted to follow up on our recent call regarding {{ $businessData->business_name }}.</p>
            <p class="mb-4">If you have any further questions or need additional information, please don't hesitate to reach out.</p>
            <p>Best regards,</p>
            <p>The Team</p>
        </div>
        <div class="bg-gray-100 p-4 text-center text-gray-600 text-sm">
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
