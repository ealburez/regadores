#!/usr/bin/python

import csv

with open('regadores.conf') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    for row in csv_reader:
        print(row)
