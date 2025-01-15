# INFO 3305 Section 02 WEB APPLICATION DEVELOPMENT
# Group A
# Ali Arabesque
<!-- You can use comments to add notes 
     that are only visible in the markdown source -->
     
<!-- Website title can be changed -->
<!-- No need for pulling requests if you want to do any changes to this readme file though any 
     minor changes can be informed through whatsapp -->
<!-- Major updates for our project can be made on the changelog below-->

## 🍽️ Project Overview

### The Problem
Long queues at Mahallah Ali Cafe have been a persistent challenge for students, causing:
- Significant waiting times during peak hours
- Reduced efficiency in food ordering and payment processes
- Inconvenience for students with limited break times

### Our Solution
We are developing a comprehensive web application to streamline the ordering and payment process, designed to:
- Eliminate long physical queues
- Provide a seamless digital ordering experience
- Save time for both customers and cafe staff

## 🎯 Project Objectives
- Create a user-friendly web interface for food ordering
- Implement secure payment integration
- Develop a real-time order tracking system
- Enhance overall dining experience at Mahallah Ali Cafe

## 🛠️ Tech Stack
- **Frontend:** Html,Css,Blade
- **Backend:** Laravel PHP Framework
- **Database:** MySql

## 👥 Team Members
- NURSYASYA ALYSSA BINTI NORJUNAIDI 2214566
- YAMUNA A/P MUNIAPPAN 2217172
- SHAZA BINTI SHAMSUL 2218714
- UMMUL KHAIRINA BINTI ABD HAMID 2227992
- NURUL IMAN BINTI MD KAMAL 2228908
- MUHAMMAD AFIQ BIN ABDUL LATIF 2228641

## 🚀 How It Works
1. Browse menu items
2. Select and customize orders
3. Make digital payment
4. Receive order confirmation
5. Food will be delivered
6. Make feedback about food order

## Features and Functionalities
1. User and management
   - manage registration and login
2. Stall selection
   - select choices of stall available and displaying menu
3. Place order
   - add order to cart
4. Payment
   - selection for cash, card or online banking
5. Order tracking
   - order submitted, order preparing and order prepared or pickup
6. Create Feedback
   - add order feedback after receiving order
  
## ERD Diagram
![Untitled Diagram 2 drawio](https://github.com/user-attachments/assets/5e4f5b42-5c68-42a7-b783-72f92697dfba)
  
## Sequence Diagram
![image](https://github.com/user-attachments/assets/042e4aa2-5ddb-4f0e-bc80-01639fb16645)

## Mockup Designs
- Menu

 ![image](https://github.com/user-attachments/assets/47bee11a-0a3f-4d8f-a4a9-db30ab217c5c)

- Food Vendor Menu
  
![image](https://github.com/user-attachments/assets/509bda76-4fef-4edd-873d-bc877b03a683)

- Drink Vendor Menu

![image](https://github.com/user-attachments/assets/e05df821-6070-47fa-94e0-4beb5487e9a1)

- Cart
  
 ![image](https://github.com/user-attachments/assets/f2fbb31b-0be7-4581-a8b4-2f4dec1c0406)

- Payment
  
 ![image](https://github.com/user-attachments/assets/193b2dec-0223-400c-85ca-36481a7dceb7)

- Delivery
  
 ![image](https://github.com/user-attachments/assets/63df60dd-cc10-46eb-96e3-b5e2a678121c)

- Feedback
  
![image](https://github.com/user-attachments/assets/859fde29-a95e-46cf-82c7-7a566237dd3b)

## Challenges 
1. Connecting, seeding and migrating database.
2. Figure out route that should be taken by a certain pages.
3. Authentication. To change the route with the middleware auth sanctum.
4. Creating fake data using factories are  confusing as each model, controller, migration file and view files must be sync perfectly.
5. Creating a form that can be filled out, submitted, and viewed afterward.

## Project system captured screen and explanation

1. Authentication
![Screenshot 2025-01-15 221608](https://github.com/user-attachments/assets/047a7380-c944-4d3b-b902-6b7417806c4e)
This is the mainpage that the users going to see. It has a Login and Register button on the navigation bar, which indicates the user not yet logged in.
![Screenshot 2025-01-15 225004](https://github.com/user-attachments/assets/307645aa-99d9-4125-85fd-720b0e293608)
The user can click on the Register button to register.
![Screenshot 2025-01-15 224746](https://github.com/user-attachments/assets/9970acb4-5169-48df-8445-5dd14a73a079)
The user can Login when clicking on the Login button
![Screenshot 2025-01-15 225013](https://github.com/user-attachments/assets/f57751c3-059c-44ed-9dc8-68fcb72f9a3f)
Once the user logged in, the user can see a Jetstream dashboard.

3. Mainpage
![Screenshot 2025-01-15 221608](https://github.com/user-attachments/assets/047a7380-c944-4d3b-b902-6b7417806c4e)
![Screenshot 2025-01-15 221753](https://github.com/user-attachments/assets/7948531d-0626-4255-992c-87201ebe06ee)
![Screenshot 2025-01-15 221803](https://github.com/user-attachments/assets/dde7dbcb-2f9f-441e-9684-d54d80395ea4)
Here is the rest images of mainpage, where it describes briefly about Cafe Ali.

4. Order History
![Screenshot 2025-01-15 222425](https://github.com/user-attachments/assets/ce94395d-f689-4124-a250-ac962c38a4ae)
Users can see their order history by clicking on the navigation bar.
 
5. Menu
![Screenshot 2025-01-15 222323](https://github.com/user-attachments/assets/2ca45880-e519-4a0f-95a3-452ee7382553)
![Screenshot 2025-01-15 222336](https://github.com/user-attachments/assets/32c419d8-1784-49d5-a708-cb18fa498105)
![Screenshot 2025-01-15 222400](https://github.com/user-attachments/assets/d0ba5b29-0310-477b-aa41-333cfbb37e3f)

Users can feel free scroll and checkout the menu vendors by clicking on the buttons. Users can add to cart their chosen menu.
 
6. Cart
![Screenshot 2025-01-15 222932](https://github.com/user-attachments/assets/5bdfdf8f-523c-4f85-93e3-1c6e29ba4dcf)
Users can view their cart before payment.
   
7. Payment
![Screenshot 2025-01-15 223507](https://github.com/user-attachments/assets/5b96ddee-2d89-4e3f-935e-66e5d11fc96f)
Users can choose any payment method to proceed with the order. However, only one payment transaction could happen at one time. 
![Screenshot 2025-01-15 224126](https://github.com/user-attachments/assets/4e98ff84-7db5-44e3-b62c-b18c84ac6181)
Users can continue to check their order status or return to mainpage.

9. Delivery
![Screenshot 2025-01-15 224140](https://github.com/user-attachments/assets/00891ec5-b4ff-482f-8f9e-0ee2b463e691)
Users can view their delivery order status and edit their address. 

10. Feedback
![Screenshot 2025-01-15 224333](https://github.com/user-attachments/assets/7f62ec68-f3be-4e4f-824f-621bde867774)
User can give feedback after their order is complete.
![Screenshot 2025-01-15 224356](https://github.com/user-attachments/assets/eaf80369-4b32-4fd5-a9a4-76c721cf1754)
This shows that feedback has been sent to database.










