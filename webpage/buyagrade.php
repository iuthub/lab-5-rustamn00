<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <h1>Buy Your Way to a Better Education!</h1>
    <p>
      The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
    </p>
    <hr />
    <h2>Give Us Your Money</h2>
    <form action="sucker.php" method="POST">
    <dl>
      <dt>Name</dt>
      <dd>
        <input type="text" name="name" />
      </dd>
      <dt>Section</dt>
      <dd>
        <select name="section" id="">
          <option value="" selected disabled hidden>(Select section)</option>
          <option value="MA">MA</option>
          <option value="MB">MB</option>
          <option value="MC">MC</option>
          <option value="MD">MD</option>
          <option value="ME">ME</option>
          <option value="MF">MF</option>
          <option value="MG">MG</option>
          <option value="MH">MH</option>
        </select>
      </dd>
      <dt>Credit Card</dt>
      <dd>
        <input type="text" name="cardnumber" />
      </dd>
      <dd>
        <input type="radio" name="card" value="Visa" /> Visa
        <input type="radio" name="card" value="Master Card" /> Master Card
      </dd>
    </dl>
    <div>
      <input type="submit" name="submit" value="I am a giant sucker" />    
    </div>
    </form>
  </body>
</html>