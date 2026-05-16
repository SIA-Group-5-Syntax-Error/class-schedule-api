Class Schedule API Documentation

Project Overview
The Class Schedule API is part of the Student Life Hub System.
 It provides class schedule information through a Laravel backend connected to an external MockAPI service using API Gateway integration.
 
Base URL
http://127.0.0.1:8000/api

API Gateway
The Laravel backend acts as an API Gateway.

Flow:
Client → Laravel Gateway → MockAPI External Service
The gateway fetches schedule data from MockAPI and returns JSON responses to the client.

External Service
MockAPI Endpoint:
https://69f34667bd2396bf530fa847.mockapi.io/schedule

Endpoint
Get Class Schedule

Request
GET /api/schedule

Full URL
http://127.0.0.1:8000/api/schedule

Method
GET

Description
Fetches all class schedule data from the external MockAPI service through the Laravel gateway.

Response Format

[
 {
   "subject": "System Integration Architecture",
   "time": "10:00 AM - 1:00 PM",
   "day": "Saturday",
   "room": "Room 305"
 },
 {
   "subject": "Web System and Technologies",
   "time": "4:00 PM - 7:00 PM",
   "day": "Saturday",
   "room": "Room 302"
 }
]

Technologies Used:
Laravel (Backend API Gateway)
PHP
MockAPI
GitHub
Postman

API Testing:
The API was tested using Postman.
Sample Test
Method   Endpoint        Result
GET      /api/schedule   Success (200 OK)


HTTP Status Codes
Code   Meaning
200   Successful request
404   Route not found
500   Server error


System Features
Fetch class schedule from external API
API Gateway integration
JSON response handling
Display subject, time, day, and room
External service communication

Developers
Group 5 – Syntax Error
Amie Love Torcende

Sample Architecture
Frontend/UI (Figma)
      ↓
Laravel Backend Gateway
      ↓
MockAPI External Service
