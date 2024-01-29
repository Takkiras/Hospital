# Use an official PHP runtime as a parent image
FROM takkiras/hms:1

# Set the working directory in the container
WORKDIR /var/www/html/hms/hospital

# Copy your PHP application code into the container
COPY . .

# Expose the port Apache listens on
EXPOSE 80

# Start Apache when the container runs
#CMD ["apache2-foreground"]