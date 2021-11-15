pipeline {
  agent any
     
  stages {
        
    stage('Git') {
      steps {
        git 'https://github.com/abhishek0795/php-web-app.git'
      }
    }
     
    stage('Build') {
      steps {
        sh '/Applications/Docker.app/Contents/Resources/bin/docker build -t abhishekjha95/php-web-app -f apache2/Dockerfile'
        sh '/Applications/Docker.app/Contents/Resources/bin/docker build -t abhishekjha95/mysql-web-app -f mysql/Dockerfile'
      }
    }  
    
            
    stage('Test') {
      steps {
       // sh 'node test'
       echo 'successfully build'
      }
    }
  }
}
