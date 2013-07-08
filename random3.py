import xlrd
import MySQLdb

# Open the workbook and define the worksheet
book= xlrd.open_workbook("chapter.xls")
sheet = book.sheet_by_name("Sheet1")

# Establish a MySQL connection
database = MySQLdb.connect (host="localhost", user = "root", passwd = "12345", db = "test")

# Get the cursor, which is used to traverse the database, line by line
cursor = database.cursor()

# Create the INSERT INTO sql query


query = """INSERT INTO chapter  VALUES (%s,%s,%s,%s)"""

# Create a For loop to iterate through each row in the XLS file, starting at row 2 to skip the headers
for r in range(1, sheet.nrows):
	chapter_no=sheet.cell(r,0).value
	chapter_name=sheet.cell(r,1).value
	section_no=sheet.cell(r,2).value
	section_name=sheet.cell(r,3).value
	# Assign values from each row
	values =(ch_no,chapter,sec_no,section)
	# Execute sql Query
	try:
		cursor.execute(query, values)
	except:
		pass


# Close the cursor
cursor.close()

# Commit the transaction
database.commit()

# Close the database connection
database.close()

# Print results
print ""
print "All Done! Bye, for now."
print ""

columns = str(sheet.ncols)
rows = str(sheet.nrows)
