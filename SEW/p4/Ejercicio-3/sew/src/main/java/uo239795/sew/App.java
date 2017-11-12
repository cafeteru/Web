package uo239795.sew;

import java.io.File;
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import org.w3c.dom.Document;
import org.w3c.dom.NamedNodeMap;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

public class App {

	public static void main(String[] args) {
		if (args.length == 0)
			System.out.println("Introduzca algun fichero xml");
		else
			for (String arg : args) {
				System.out.println("Leyendo el archivo " + arg);
				readXml(arg);
				System.out.println("\n#########################################\n");
			}
	}

	private static void readXml(String name) {
		try {
			File file = new File(name);
			DocumentBuilder dBuilder = DocumentBuilderFactory.newInstance().newDocumentBuilder();
			Document doc = dBuilder.parse(file);
			System.out.println("Root element : " + doc.getDocumentElement().getNodeName());
			if (doc.hasChildNodes()) {
				printNote(doc.getChildNodes());
			}

		} catch (Exception e) {
			System.out.println(e.getMessage());
		}
	}

	private static void printNote(NodeList nodeList) {
		for (int count = 0; count < nodeList.getLength(); count++) {
			Node tempNode = nodeList.item(count);
			if (tempNode.getNodeType() == Node.ELEMENT_NODE) {
				System.out.println("\nNode Name = " + tempNode.getNodeName() + " [OPEN]");
				System.out.println("Node Value = " + tempNode.getTextContent());
				if (tempNode.hasAttributes()) {
					NamedNodeMap nodeMap = tempNode.getAttributes();
					for (int i = 0; i < nodeMap.getLength(); i++) {
						Node node = nodeMap.item(i);
						System.out.println("attr name : " + node.getNodeName());
						System.out.println("attr value : " + node.getNodeValue());
					}
				}
				if (tempNode.hasChildNodes()) {
					printNote(tempNode.getChildNodes());
				}
				System.out.println("Node Name = " + tempNode.getNodeName() + " [CLOSE]");
			}
		}
	}
}