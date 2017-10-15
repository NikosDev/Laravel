#REST API Documentation

<details>
  <summary><b> Show Messages </b></summary>

  Returns json data about a single user.

----
* **URL**

  /v1/messages

* **Method:**

  `GET`
  
*  **URL Params**

   **Required:**
 
   `none`

* **Success Response:**

  * **Code:** 200 <br />
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `{"error":"there is an error","success":"0","status":"404"}`


* **Sample Call:**

  127.0.0.1:8000/api/v1/messages
</details>
