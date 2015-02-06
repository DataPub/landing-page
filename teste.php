<form class="form" id="mailgun" role="form" method="POST"> 
  <label for="name">Name</label> 
  <input type="name" id="name" name="name" placeholder="Name" required>
    
  <label for="email">Email</label>
  <input type="email" id="email" name="email" placeholder="Email" required>
    
  <label for="subject">Subject</label>
  <input type="text" id="subject" name="subject" placeholder="Subject" required>
 
  <label for="message">Message</label> 
  <textarea id="message" name="message" rows="6" placeholder="Message" required></textarea> 
  
  <button type="submit">Send</button>
</form>