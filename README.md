🚀 Project Highlight: Secure RDS Integration with AWS Instances 🚀

This is the small overview of the project, you can find more information in the project description file.

🔺 Set up an RDS in own vpc-private subnets to ensure enhanced security. In rds security group rules added instance sg, to make connection between them.

🔺 Launched a Bastion (public) instance and a private instance. The Bastion instance serves as a secure gateway to access the private instance. Store pem keypair in a file and use this file in command.

command to connect to private instance. 
---------------------------------------------
🔹 ssh -i keypair-file ec2-user@private-ip-of-privateinstance

🔺 Installed MySQL on the private instance, connected it with the RDS, and created a database.
🔹 yum install mysql -y
🔹 export MYSQL_HOST=rds-end-point
🔹 mysql -h rds-end-point -P 3306 -u username -p (it will prompt for passwd to enter)

🔺 Form Delivery: Delivered a customer form through the private instance. All the data from this form is stored securely in the RDS.

🔺 Data Verification: Verified the data integrity by executing SQL queries on the private instance to ensure all form submissions are accurately recorded in the database.

This project demonstrates the seamless integration of AWS services to create a secure, private, and scalable data management system. 🎯
