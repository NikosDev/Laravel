## REST API Documentation

<details>
  <summary><b> Show Messages </b></summary>

  Returns json data about a single user.

----
* **URL**

  /v1/messages

* **Method:**

  `GET`
  
*  **URL Params**
 
   `none`

* **Success Response:**

  * **Code:** 200 <br />
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `{"error":"there is an error","success":"0","status":"404"}`
  
  * **Code:** 500 Internal Server Error  <br />
    **Content:** `{"error":"there is an error","success":"0","status":"500"}`

* **Sample Call:**

  127.0.0.1:8000/api/v1/messages
</details>

<details>
  <summary><b> Post Messages </b></summary>

  Post email,name,subject and body to database.

----
* **URL**

  /v1/messages

* **Method:**

  `POST`
  
*  **URL Params**
 
   `none`
   
*  **Data Params**

    **Required:**
 
   `email`,`name`,`subject`,`body`

* **Success Response:**

  * **Code:** 201 <br />
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `{"error":"there is an error","success":"0","status":"404"}`
  
  * **Code:** 400 Validation Error  <br />
    **Content:** `{"email":["The email field is required."],"info":["Bad Request"],"status":["400"]}`
  
  * **Code:** 500 Internal Server Error  <br />
    **Content:** `{"error":"there is an error","success":"0","status":"500"}`  


* **Sample Call:**

  127.0.0.1:8000/api/v1/messages
</details>
