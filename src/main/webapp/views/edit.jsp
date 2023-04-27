
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>

<body bgcolor="wheat">
	<h1>EDIT User DetailS</h1>

	<form:form action="/Register">
		<table>
			<tr>
				<td></td>
				<td><form:hidden path="id" /></td>
			</tr>
			<tr>
				<td>Name :</td>
				<td><form:input path="name" /></td>
			</tr>
			<tr>
				<td>price :</td>
				<td><form:input path="price" /></td>
			</tr>
			<tr>
				<td>quantity :</td>
				<td><form:input path="quantity" /></td>
			</tr>
			<tr>
				
			<td><input type="submit" Value="EDITSAVE" /></td>
			</tr>


		</table>


	</form:form>
	      

</body>
