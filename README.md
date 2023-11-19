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
git clone git@github.com:zkornas/info310-lab-docker.git
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