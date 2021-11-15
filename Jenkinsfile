pipeline {
  agent any
     
  stages {
  
    stage('Build') {
      steps {
        sh '/Applications/Docker.app/Contents/Resources/bin/docker build -t abhishekjha95/php-web-app -f apache2/'
        sh '/Applications/Docker.app/Contents/Resources/bin/docker build -t abhishekjha95/mysql-web-app -f mysql/'
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
