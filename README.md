#Project 2: xkcd Password Generator 
#By John Lim

#Goal
From Xkcd Password Generator's illustration, generate random words to use password and to enhance strenght, using mixture of number and special character were demonstrated in this project.

#Demo
Jing for Project 2 link: http://www.screencast.com/t/3VOIiKvt

#Note
Since we didn't cover JavaScript, I've used error messages and varables with POST and return them in the label. Using Array and mt_Rand to demonstrate better randomized options where it uses little mroe complex algorithm. When checked box or number in text box was entered, it will still keep the value when submitted in order to keep generate again as values were being returned to set again. It grabs words from text file where php will open and set them into array as random number will generate and that gets used as a key. Then, every key that was generated will grab a word from the array then, builds string to store them into one varaible. Trim them and add other characters using different array and rand function to generate dynamic key.

#Other
Bootstrap: http://getbootstrap.com/

#Live enviroment
http://p2.projectjohnlim.com/