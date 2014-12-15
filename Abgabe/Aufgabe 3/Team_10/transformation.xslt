<?xml version="1.0" ?>

<xsl:stylesheet version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
		<items>

			<xsl:for-each select="files/file">
			<item>

				<id><xsl:value-of select="id"/></id>
				<filename><xsl:value-of select="filename"/></filename>
				<file_url><xsl:value-of select="filepath"/></file_url>
				<metadata>
					<size>not-defined</size>
					<creation_date><xsl:value-of select="creation_date"/></creation_date>
					<mimetype>
						<xsl:choose>
							<xsl:when test="filetype = 'jpeg'">image/jpeg</xsl:when>
							<xsl:when test="filetype = 'txt'">txt/plain</xsl:when>
							<xsl:when test="filetype = 'mp3'">audio/mpeg3</xsl:when>
						</xsl:choose>
					</mimetype>
					<thumbnail_available>
						<xsl:choose>
							<xsl:when test="filetype = 'jpeg'">true</xsl:when>
							<xsl:when test="filetype = 'txt'">false</xsl:when>
							<xsl:when test="filetype = 'mp3'">false</xsl:when>
						</xsl:choose>
					</thumbnail_available>
				</metadata>                
			</item>
			</xsl:for-each>

		</items>

	</xsl:template>
</xsl:stylesheet>
