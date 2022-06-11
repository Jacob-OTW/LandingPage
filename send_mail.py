from cgi import print_arguments
import csv
import sys
import datetime
import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
from config import outlook_password, outlook_mail


def send_mail(to_mail: str):
    # Configure the email
    password = outlook_mail
    from_mail = outlook_password
    subject = f'One time news letter'
    body = 'This is just a dummy message'

    # Put together email
    msg = MIMEMultipart()
    msg['from'] = from_mail
    msg['to'] = to_mail
    msg['subject'] = subject
    body = MIMEText(body, 'plain')
    msg.attach(body)

    # Log into account
    server = smtplib.SMTP("smtp-mail.outlook.com", 587)
    server.connect('smtp-mail.outlook.com', 587)
    server.ehlo()
    server.starttls()
    server.ehlo()
    server.login(from_mail, password)

    # Send the email
    server.send_message(msg, from_addr=from_mail, to_addrs=[to_mail])


def write(filename: str, row: str, type='a'):  # Write a row to a csv file, by default the file is not overwritten
    with open(filename, type, newline='') as f:
        writer = csv.writer(f)
        writer.writerow(row)


try:
    email = sys.argv[1]
    send_mail(email)
    write('file.csv', [email])
    print('it worked')
except Exception as e:
    print(e)
