package uo239795.sew;

import java.io.*;
import java.util.ArrayList;

public class App {

	public static void main(String[] args) {
		if (args.length == 0)
			System.out.println("Introduzca algun fichero csv");
		else
			for (String arg : args) {
				System.out.println("Leyendo el archivo " + arg);
				readCSV(arg);
				System.out.println("\n#########################################\n");
			}
	}

	public static void readCSV(String csv) {
		String csvFile = csv;
		BufferedReader br = null;
		String line = "", cvsSplitBy = ",", file = "";
		try {
			boolean first = false;
			ArrayList<String> tags = new ArrayList<String>();
			br = new BufferedReader(new FileReader(csvFile));
			file += ("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
			String name = csvFile.substring(0, csvFile.length() - 4);
			file += ("<" + name + ">\n");
			while ((line = br.readLine()) != null) {
				if (first)
					file += ("\t<child>\n");
				String[] element = line.split(cvsSplitBy);
				for (int i = 0; i < element.length; i++) {
					if (!first) {
						tags.add(element[i]);
					} else {
						String aux = tags.get(i);
						file += ("\t\t<" + aux + ">\n");
						file += ("\t\t\t" + element[i] + "\n");
						file += ("\t\t</" + aux + ">\n");
					}
				}
				if (first)
					file += ("\t</child>\n");
				first = true;
			}
			file += ("</" + name + ">\n");
			saveXml(file, name);
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		} finally {
			if (br != null) {
				try {
					br.close();
				} catch (IOException e) {
					e.printStackTrace();
				}
			}
		}
	}

	public static void saveXml(String file, String name) {
		BufferedWriter bw = null;
		FileWriter fw = null;
		try {
			fw = new FileWriter(name + ".xml");
			bw = new BufferedWriter(fw);
			bw.write(file);
			System.out.println("Creado el archivo " + name + ".xml");
		} catch (IOException e) {
			e.printStackTrace();
		} finally {
			try {
				if (bw != null)
					bw.close();
				if (fw != null)
					fw.close();
			} catch (IOException ex) {
				ex.printStackTrace();
			}
		}
	}
}