import csv
import sys


def write(filename: str, row: str, type='a'):  # Write to csv file
    f = open(filename, type, newline='')
    writer = csv.writer(f)
    writer.writerow(row)
    f.close()

if __name__ == '__main__':
    write('file.csv', [sys.argv[1]])
