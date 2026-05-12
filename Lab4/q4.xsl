<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
    <html><body>
        <h2>List of students</h2>
        <xsl:for-each select="students/student">
            <p>Name: <xsl:value-of select="name"/>, Address: <xsl:value-of select="address"/>, Roll no: <xsl:value-of select="rollno"/></p>
        </xsl:for-each>
    </body></html>
</xsl:template>
</xsl:stylesheet>