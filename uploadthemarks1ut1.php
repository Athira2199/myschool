<?php
session_start();
if(isset($_SESSION['login_user']))
{
echo'<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1
{
  padding-left:34%;
  font-family:American Typewriter;
}
td
{
  font-family:American Typewriter;
}
.marks1,.marks2,.marks3
{
  margin-right:99px;
  margin-left: 399px;
  /*background-image:url("pictures/haisc.jpg");*/
}
.col-md-3 > ul > li
{
  padding-top:9%;
}
.col-md-3
{
  background-color:#2E2E2E;
  margin-top:4%;
  margin-bottom:1%;
}
</style>
</head>
<body>';
include("nav.php");
include("columnf.php");
echo'<br><br><br>
<div class="marks1">
  <h1>UNIT TEST1</h1>
  <table class="table">
  <form action="uploadthemarks1ut1.php" method="post">
    <tr>
<div class="form-group">
  <td><label for="user">NAME:</label></td><td><input type="text" class="form-control" id="user" name="user1"></td>
    </div>
</tr>
<tr>
<div class="form-group">
  <td><label for="id">ID:</label></td><td><input type="text" class="form-control" id="id" name="id1"></td>
    </div>
</tr>
  <tr>
    <div class="form-group">
      <td><label for="science">SCIENCE:</label></td>
      <td><select class="form-control" id="science" name="science1">
       <option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option> <option>9</option> <option>10</option><option>11</option> <option>12</option> <option>13</option> <option>14</option> <option>15</option> <option>16</option><option>17</option><option>18</option> <option>19</option>
        <option>20</option><option>21</option> <option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option> <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option>
       <option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
       <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
      </select></td>
  </div>
  </tr>
  <tr>
<div class="form-group">
      <td><label for="sscience">SOCIAL SCIENCE:</label></td>
      <td><select class="form-control" id="sscience" name="sscience1">
         <option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option> <option>9</option> <option>10</option><option>11</option> <option>12</option> <option>13</option> <option>14</option> <option>15</option> <option>16</option><option>17</option><option>18</option> <option>19</option>
        <option>20</option><option>21</option> <option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option> <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option>
       <option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
       <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
      </select></td>
  </div>
</tr>
<tr>
  <div class="form-group">
      <td><label for="maths">MATHEMATICS:</label></td>
     <td> <select class="form-control" id="maths" name="maths1">
         <option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option> <option>9</option> <option>10</option><option>11</option> <option>12</option> <option>13</option> <option>14</option> <option>15</option> <option>16</option><option>17</option><option>18</option> <option>19</option>
        <option>20</option><option>21</option> <option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option> <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option>
       <option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
       <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
      </select></td>
  </div>
</tr>
<tr>
  <div class="form-group">
     <td> <label for="english">ENGLISH:</label></td>
     <td> <select class="form-control" id="english" name="english1">
         <option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option> <option>9</option> <option>10</option><option>11</option> <option>12</option> <option>13</option> <option>14</option> <option>15</option> <option>16</option><option>17</option><option>18</option> <option>19</option>
        <option>20</option><option>21</option> <option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option> <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option>
       <option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
       <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
      </select></td>
  </div>
  </tr>
  <tr>
<div class="form-group">
      <td><label for="hindi">HINDI:</label></td>
      <td><select class="form-control" id="hindi" name="hindi1">
         <option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option> <option>9</option> <option>10</option><option>11</option> <option>12</option> <option>13</option> <option>14</option> <option>15</option> <option>16</option><option>17</option><option>18</option> <option>19</option>
        <option>20</option><option>21</option> <option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option> <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option>
       <option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
       <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
      </select></td>
  </div>
</tr>
<tr>
  <div class="form-group">
      <td><label for="computer">COMPUTER:</label></td>
      <td><select class="form-control" id="computer" name="computer1">
         <option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option> <option>9</option> <option>10</option><option>11</option> <option>12</option> <option>13</option> <option>14</option> <option>15</option> <option>16</option><option>17</option><option>18</option> <option>19</option>
        <option>20</option><option>21</option> <option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option> <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option>
       <option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
       <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
      </select></td>
  </div>
</tr>
<tr>
  <div class="form-group">
     <td> <label for="games">GAMES:</label></td>
      <td><select class="form-control" id="games" name="games1">
        <option>0</option> <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option> <option>9</option> <option>10</option><option>11</option> <option>12</option> <option>13</option> <option>14</option> <option>15</option> <option>16</option><option>17</option><option>18</option> <option>19</option>
        <option>20</option><option>21</option> <option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option> <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option>
       <option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
       <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
      </select></td>
  </div>  
</tr>
<tr>
  <div class="form-group">
  <td>
    <input type="submit" class="btn btn-success form-control" value="SUBMIT" name="submit1">
  </td>
</div>
<div class="form-group">
  <td>
    <input type="reset" class="btn btn-danger form-control" value="RESET" name="reset1">
  </td>
</div>
</tr>
</form>
</table>';
if (isset($_POST['submit1']))
            {
            include("connect.php");
            $query = mysql_query("SELECT * FROM marks1 WHERE user='$_POST[user1]' and id='$_POST[id1]'");
            if (mysql_num_rows($query)!=0)
            {
            $sql="UPDATE marks1 
            SET science1=$_POST[science1],socialscience1=$_POST[sscience1],mathematics1=$_POST[maths1],hindi1=$_POST[hindi1],english1=$_POST[english1],computer1=$_POST[computer1],games1=$_POST[games1] WHERE user='$_POST[user1]' and id='$_POST[id1]' ";
            if (!mysql_query($sql,$db))
            {
              die('Error: ' . mysql_error());
            }
            else
            {
            echo "Record Submitted Successfully";
            }
            }
            else
      {
    echo "<script type='text/javascript'>alert('Invalid User Name Or Id!')</script>";
    }
  }
echo'</div>';
include("footer.php");
echo'</body>
</html>';
}
else
{
  header("location:sessiontimedoutf.php");
}