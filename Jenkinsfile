pipeline {
  agent any
     
  stages {
  
    stage('Build') {
      steps {
        sh 'cd apache2 && /Applications/Docker.app/Contents/Resources/bin/docker build -t abhishekjha95/php-web-app .'
        sh 'cd mysql && /Applications/Docker.app/Contents/Resources/bin/docker build -t abhishekjha95/mysql-web-app .'
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
