<?xml version='1.0' encoding='UTF-8'?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
			<METADATA>
				<FIELD NAME="City" TYPE="TEXT"/>
				<FIELD NAME="Temperature" TYPE="NUMBER"/>
				<FIELD NAME="Humidity" TYPE="NUMBER"/>
				<FIELD NAME="Wind Speed" TYPE="NUMBER"/>
				<FIELD NAME="Wind Direction" TYPE="NUMBER"/>
				<FIELD NAME="Clouds" TYPE="TEXT"/>
			</METADATA>
			<RESULTSET>
				<ROW>
					<COL>
						<DATA><xsl:value-of select="current/city/@name"/></DATA>
					</COL>
					<COL>
						<DATA><xsl:value-of select="current/temperature/@value"/></DATA>
					</COL>
					<COL>
						<DATA><xsl:value-of select="current/humidity/@value"/></DATA>
					</COL>
					<COL>
						<DATA><xsl:value-of select="current/wind/speed/@value"/></DATA>
					</COL>
					<COL>
						<DATA><xsl:value-of select="current/wind/direction/@value"/></DATA>
					</COL>
					<COL>
						<DATA><xsl:value-of select="current/clouds/@name"/></DATA>
					</COL>
				</ROW>
			</RESULTSET>
		</FMPXMLRESULT>
	</xsl:template>
</xsl:stylesheet>