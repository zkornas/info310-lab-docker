# INFO 310 Lab
This is the set of Docker containers that we can use to develop a comprehensive lab for the INFO 310 course. The goal is to have students iteratively apply security concepts that they learn to a single project throughout the quarter. Once complete, students will have successfuly made a vulnerable web application secure which will have allowed them to demonstrate the concepts that they learned in INFO 310 to a "real world" setting.

## Deploying the Docker Container(s)
1. Download and install the [Docker engine](https://docs.docker.com/engine/install/).
You can confirm it installed correctly by running the following command:
```
docker --version
```

2. Clone this repository:
```
git clone git@github.com:zkornas/info310-lab-docker
```

3. Enter the directory where you cloned the repository:
```
cd info310-lab-docker
```

4. Execute the `docker-compose` file to build and run the containers.
```
docker-compose up
```

5. You should now be able to view the web application at [localhost:8080](http://localhost:8080)

6. Once you are done, you can stop the Docker containers:
```
docker-compose down
```

## SQL Injection Challenges

For these challenges take the role of Bob Williams, Student ID: 1230123

>You overheard Alice, a fellow INFO 310er, at the H.U.B. bragging about how easy the midterm was and that she could get a 4.0 in this class with her eyes closed. You seriously doubt that, as she asked you 15 minutes before the test what the difference between symmetric and asymmetric cryptography was. You want to see for yourself what grade she *really* has.

1. Use the INFO 310 site to see Alice's grade.

>Taylor Swift is on tour! Tickets are going on sale at 2:00PM Wednesday, but that is during your INFO 310 lecture :O You don't want to miss class incase Dr. Reifers decides to do another pop quiz, but you're also a swiftie 4 life. Maybe you can somehow cancel class that day...

2. Use the instructor portal to make an announcement as Dr. Reifers that class is cancelled on Wednesday.

>Great job! You took the midterm and are at a 3.8 in the class (which is quite impressive!). You think to yourself *"I, Bob Williams, deserve a 4.0! After all, I have been able to successfully hack this lame website."*. What if you can give yourself a 4.0, and no one has to know...

3. Change your grade in the gradebook to a 4.0.

>You are talking with Alice while she is bragging about her superior hacking abilities. You casually mention all the hacking you have done on the INFO 310 site, to which she responds, *"There is no way you hacked that website! I wasn't even able to do that and you don't even have HALF the technical skills I do!"*. As you start to see red, you want to let everyone know the hacking mastermind you really are. This would surely make Alice shut up once and for all. You start to develop a plan to debute your new skills...

4. Give yourself instructor level privledges and make an announcement **as Bob** letting everyone know you hacked the INFO 310 website.


You can view solutions to these challenges [here](sql_solutions.md)!
